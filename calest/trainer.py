from pyimagesearch.localbinarypatterns import LocalBinaryPatterns
from sklearn.svm import SVC
from imutils import paths
import argparse
import cv2
import cPickle

ap = argparse.ArgumentParser()
ap.add_argument("-t", "--training",required=True,
	help="path to the training images")
args = vars(ap.parse_args())

desc = LocalBinaryPatterns(24, 8)
data = []
labels = []

for imagePath in paths.list_images(args["training"]):
	# load the image, convert it to grayscale, and describe it
	image = cv2.imread(imagePath)
	gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
	hist = desc.describe(gray)

	# extract the label from the image path, then update the
	# label and data lists
	labels.append(imagePath.split("/")[-2])
	data.append(hist)

# train a Linear SVM on the data
model = SVC(C=10 ** 3, gamma=10 **2)
model.fit(data, labels)

f = open("model.cpickle", "w")
f.write(cPickle.dumps(model))
f.close()
