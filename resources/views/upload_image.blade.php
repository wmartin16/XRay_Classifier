@extends('layouts.app')

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>

    <script>
        let net;

        function argmax(array) {
            return [].reduce.call(array, (m, c, i, arr) => c > arr[m] ? i : m, 0)
        }

        async function loadModel() {
            console.log('Loading mobilenet..');

            // Load the model.
            net = await tf.loadLayersModel('/model/model.json');
            console.log('Successfully loaded model');

            const image = document.getElementById('inputImage');

            if (image) {
                const tensorImage = tf.browser.fromPixels(image).resizeBilinear([224, 224]).toFloat().div(255)
                    .expandDims();
                // Make a prediction through the model on our image.
                return await net.predict(tensorImage).data();
            }
        }

        loadModel().then(result => {
            const id2label = {
                0: "COVID",
                1: "Normal",
                2: "Pneumonia"
            };

            if (!result) {
                return;
            }
            const prediction = id2label[argmax(result)];

            console.log(prediction);
            document.getElementById('predictedStrong').innerText = 'Predicted';
            document.getElementById('predictedClass').innerText = prediction;
            document.getElementById('confidenceStrong').innerText = 'Confidence';
            document.getElementById('predictionConfidence').innerText = (result[argmax(result)] * 100).toFixed(2) +
                '%';
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <h1>Upload Image</h1>

        <div class="upload-image-form-ctr">
            <form action="{{ route('store_image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 col-form-label">Upload your image here</label>
                    <div class="custom-file mb-2">
                        <input type="file" name="upload_img"
                            class="custom-file-input @error('upload_img') is-invalid @enderror" id="fileInput">
                    </div>

                    @error('upload_img')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @error('failed')
                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-2">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                @enderror

                @if (session()->has('success'))
                    <div class="form-group row mt-3 mb-0">
                        <div class="col-md-10 offset-1">
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session()->get('success') }}</strong>
                            </div>
                            <div class="d-flex">
                                <img crossorigin="anonymous" id="inputImage"
                                    style="height:250px;width:250px;margin-right:20px;"
                                    src="{{ session()->get('image') }}" alt="">
                                <div>
                                    <strong id="predictedStrong"></strong>
                                    <p id="predictedClass"></p>
                                    <strong id="confidenceStrong"></strong>
                                    <p id="predictionConfidence"></p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif

                <div class="button-container">
                    <button type="submit" class="btn btn-primary col-sm-2 p-2 mt-3">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection
