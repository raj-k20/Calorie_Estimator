from PIL import *
import Image
from os import walk
import sys,os
path = "/home/rajesh/Documents/imagess/images/testing"
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
			


