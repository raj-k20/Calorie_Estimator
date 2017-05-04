
# Calorie_Estimator
A web based service which uses image recognization by applying SVM on LBP features of the images of food items

This system uses a xampp server with php as backend and python for image recognization
You may need following libraries for running the applcation:-
opencv
scikit-learn
scikit-image
PIL
cPickle
numpy
scipy

The website initially calculates BMR(Body Metabolic Rate) by taking user's Height weight and age.Then once the profile is 
created he will have to upload the image of the food item he is taking for that particular meal.Once the upload is successful
the website will return the amount of calories is taken by the user for that particular meal,This detail is further stored in 
mysql database for every user.At the end of the day the system will alert the user how much the calorie has exceeded the BMR 
value and also return how many kilometers he will have to run or walk in order to burn those calories.

How this image recognization works?
Basically we have taken data from PFID(Pittsburg Food Image Data) for various restraunts,We augmented these images by 45 degrees
, once augmentation was done we applied Local Binary patterns which creates histograms these histograms are trained on SVM with 
their food names as class labels.Once trained we store these details on the cPickle file, when a new file is uploaded the website 
will again create histograms of the LBP values of the uploaded image then matches the histogram value in cPickle values and returns 
the food name which in turn the python script matches with the food map of the restraunt to get calories value. 
