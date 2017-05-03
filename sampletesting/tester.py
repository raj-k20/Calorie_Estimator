from pyimagesearch.localbinarypatterns import LocalBinaryPatterns
from sklearn.svm import LinearSVC
from imutils import paths
import argparse
import cv2
import cPickle
import Image
from os import walk
import sys,os

path = "/home/rajesh/Downloads/local-binary-patterns/images/testing"
size = 480, 300
for (dirpath, dirnames, filenames) in walk(path):
    for name in filenames:
	if name.endswith((".png",".jpg")):
		if "thumb" not in name:
			outfile=os.path.splitext(dirpath+"/"+"z"+name)[0] + ".jpg"
			im = Image.open(dirpath+"/"+name)
            		im.thumbnail(size, Image.ANTIALIAS)
			im.save(outfile, "JPEG")
			os.remove(dirpath+"/"+name)

ap = argparse.ArgumentParser()
ap.add_argument("-e", "--testing",required=True, 
	help="path to the tesitng images")
args = vars(ap.parse_args())
model = cPickle.loads(open("model.cpickle").read())
desc = LocalBinaryPatterns(24, 8)
data = []
labels = []
for imagePath in paths.list_images(args["testing"]):
	# load the image, convert it to grayscale, describe it,
	# and classify it
	image = cv2.imread(imagePath)
	gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
	hist = desc.describe(gray)
        prediction = model.predict([hist])[0]
	print prediction
	rk = prediction.replace("_", " ")
	with open("/home/rajesh/Downloads/local-binary-patterns/foocals.txt") as fil:
		for line in fil:
			if rk in line:
				lt = line.strip(rk)
    				print lt
        os.remove(imagePath)

