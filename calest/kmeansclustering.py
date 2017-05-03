from random import *
from math import *
from csv import *

CLUSTERS=[]
DISTANCE_METRIC=[]
def load_csv_file(filename):
	DATASET = list()
	with open(filename, 'r') as f:
		cr = reader(f)
		for row in cr:
			if not row:
				continue
			DATASET.append(row)
	return DATASET

def classLabelToInt(dataset, column):
    class_values = [row[column] for row in dataset] #all class labels
    unique = set(class_values) #all distinct class labels
    lookup = dict()
    for i, value in enumerate(unique):
        lookup[value] = i
    for row in dataset:
        row[column] = lookup[row[column]] # assign distinct integers starting from 0 to noOfDistinct Values
    return lookup

def stringToFloat(DATASET, column):
	for row in DATASET:
		row[column] = float(row[column].strip())

def step1_form_initial_cluster_center(DATASET,k,length):
    ran=[]
    for i in range(k):
        r=randrange(0,length)
        ran.append(r)
    #ran=[0,3,6]
    cluster=[DATASET[k] for k in ran]
    print("Initial Cluster Center")
    for j in cluster:
        print(j)
    return cluster

def euclidianDistance(x,y):
    length=len(x)
    total=0
    for i in range(length):
        diff=x[i]-y[i]
        diff=abs(diff)
        part=diff**2
        total+=part
    DISTANCE_METRIC=total**(1/2)
    return DISTANCE_METRIC

def find_the_index_in_list(number,list1):
    for i in range(len(list1)):
        if(list1[i]==number):
            return i

def step2_find_distance_between_cluster_point_and_datapoint(DATASET,clusterpoints):
    length=len(clusterpoints)
    lengthDataset=len(DATASET)
    clusterSet=[]
    distanceVector=[]
    for i in range(lengthDataset):
        dist=[]
        for j in clusterpoints:
            d=euclidianDistance(j,DATASET[i])
            dist.append(d)
        distanceVector.append(dist)
        clusterNumber=find_the_index_in_list(min(dist),dist)+1
        #print(clusterNumber)
        clusterSet.append(clusterNumber)
    global CLUSTERS
    CLUSTERS.append(clusterSet)
    global DISTANCE_METRIC
    DISTANCE_METRIC.append(distanceVector)

def find_mean_of_values(a):
    lengthmain=len(a)
    lengthsub=len(a[0])
    output=[]
    for i in range(lengthsub):
        sums=0
        for j in range(lengthmain):
            sums+=a[j][i]
        avg=sums/lengthmain
        output.append(avg)
    #print(output)
    return output

def step3_get_new_cluster_points(DATASET,iterationNumber,length):
    global CLUSTERS
    newCenter=[]
    clustertobeconsidered=CLUSTERS[iterationNumber]
    partition={}
    for i in range(len(clustertobeconsidered)):
        if(clustertobeconsidered[i] not in partition):
            partition[clustertobeconsidered[i]]=[]
        partition[clustertobeconsidered[i]].append(DATASET[i])
    for key,value in partition.items():
        #print("key=",key,"value",value)
        newone=find_mean_of_values(value)
        newCenter.append(newone)
    return newCenter

def main():
    #DATASET=[[2,10],[2,5],[8,4],[5,8],[7,5],[6,4],[1,2],[4,9]]
    filename = 'C:/Users/Deepak Acharya/Pictures/SPECTF_New.csv'
    DATASET=load_csv_file(filename)
    classLabelFile='C:/Users/Deepak Acharya/Desktop/SPECTF_New_CL.csv'
    ds=load_csv_file(classLabelFile)

    classlabelarray=classLabelToInt(ds,0);
    print("Printing Ds")
    print(ds)
    kvalue=2
    for i in range(len(DATASET[0])):
        stringToFloat(DATASET, i)
    clusterpoints=step1_form_initial_cluster_center(DATASET,kvalue,len(DATASET))
    c=0
    oldone=-1
    newone=+1
    while(oldone != newone):
        oldone=clusterpoints
        step2_find_distance_between_cluster_point_and_datapoint(DATASET,clusterpoints)
        newclusterpoint=step3_get_new_cluster_points(DATASET,c,len(clusterpoints))
        clusterpoints=newclusterpoint
        newone=newclusterpoint
        c+=1;
    k=0
    finalCluster=[]
    print("Number Of Ierations Took=",c)
    for i in CLUSTERS:
            if((k==(c-1)) or (k==(c-2))):
                    finalCluster=i
            k+=1
    print(finalCluster)
    whichpointbelongstowhichcluster=[[] for i in range(kvalue)]

    for i in range(len(finalCluster)):
        whichpointbelongstowhichcluster[finalCluster[i]-1].append(i+1)

    totalCount=[0 for i in range(kvalue)]
    countArray=[0 for i in range(kvalue)]
    for i in range(len(whichpointbelongstowhichcluster)):
        for j in whichpointbelongstowhichcluster[i]:
            #print(j,j-1,ds[j-1][0],i)
            if(ds[j-1][0]==i):
                countArray[i]+=1
            totalCount[i]+=1
    print(totalCount)
    print(countArray)

    correct=[]

    for i in range(kvalue):
        partAccuracy=countArray[i]/totalCount[i]*100
        correct.append(partAccuracy)

    sums=0
    for i in range(kvalue):
        sums+=correct[i]

    print("Accuracy=%.2f"%(sums/kvalue))


main()
