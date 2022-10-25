# Library Management System
<h3>Live Demo: https://danishproj101.000webhostapp.com/index.php </h3>
<h3>Structure of App</h3>
 ⚈ Admin login - > Admin Dashboard
 <br>⚈ User login - > User Dashboard

  <h3>Hello World of Object Recognition!</h3>
 <h2>Aim:</h2> To make a convolution neural network to recognise handwritten digits by training the model on MNIST dataset available in keras.
 <br>
 <h2>MNIST DATASET:</h2>The training dataset contain 60000 images and testing contain 10000 images .Each image is 28x28 pixel and grey scale.
  <br>
 <h2>CNN MODEL OVERVIEW:</h2>
 <br>⚈ It is a 17 layer model with Conv2D,MaxPooling2D,BatchNormalization,Dense,Flatten and Dropout layer combination.
 <br>⚈ Input layer has 32 neuron and output layer has 10 neurons as 10 different clases exsist.
 <br>⚈ 30 epochs are used.
 <br>⚈ Categorical_loss is loss function and adam is used for optimization.
 <br>⚈ Model gives 99.15% accuracy.
<h2>For Deployment:</h2>Save model using tensorflowjs converters as json file and weight as .h5 file.Use Tensorflow.js to load model and predict in javascript file

### User interface
<img src="readme-images/user_interface.png" width="600">

### sample 1 - Digit 4
<img src="readme-images/samle1-digit44.PNG" width="600">

### sample 2 - Digit 4 (different handwriting but correct prediction)
<img src="readme-images/sample1-digit4.png" width="600">

### sample 3 - Digit 1
<img src="readme-images/sample2_digit1.png" width="600">

### sample 4 - Digit 1 (different handwriting but correct prediction)
<img src="readme-images/sample2_digit11.png" width="600">
