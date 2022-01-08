## COVID19 and Pneumonia Chest X-Ray Classifier Web App

The COVID-19 pandemic may very soon come to a close with the development and distribution of vaccines. However, testing and diagnosis of the virus is still paramount in combat-ing the calamity of the pandemic. Although most medical institutions have mostly relied on traditional methods of COVID-19 diagnosis (such as Reverse transcription-polymerase chainreaction or RT-PCR), several studies have indeed shown that chest radiography can also be a viable alternative. Features and abnormalities that distinguish chest x-rays of COVID-19infected patients from uninfected patients can be identified and have been recommended as another diagnosis method. Furthermore, early diagnosis using CXRs also takes less time and has better sensitivity compared to RT-PCR. It should also be noted that CT scans have higher sensitivity to COVID-19detection compared to CXRs. However, CXRs are muchmore readily available and affordable around the world, hence our focus in using them instead of the former.

We trained and fine-tuned several Convolutional Neural Network-based models on multiple COVID-10 and Pneumonia datasets. We then deployed one of the models in a web application via Laravel. For a more detailed explanation, please read our report found [here](https://github.com/wmartin16/XRay_Classifier/blob/main/paper.pdf).

## Documentation

### Login/Register

This is the page where users register for the web app and then login using their credentials.

![](https://github.com/wmartin16/XRay_Classifier/raw/main/docs/login.png)

### Upload and Predict

Users then are able to upload chest x-ray scan images and then obtain the classifier's prediction.

![](https://github.com/wmartin16/XRay_Classifier/raw/main/docs/predict.png)

### Learn Classification Algorithm

Curious users can similarly learn more about Convolutional Neural Networks that power our algorithm.

## Instructions

First, clone our repository to your local machine

```
git clone https://github.com/wmartin16/XRay_Classifier.git
```

Then, navigate to the folder and install the necessary Laravel vendors

```
cd XRay_Classifier
composer install
```

Finally, serve the web application

```
php artisan serve
```

## Authors

-   Ananto Joyoadikusumo
-   Brandon Scott Buana
-   Fernando Liko Marchai
-   William Martin
-   Wilson Wongso
