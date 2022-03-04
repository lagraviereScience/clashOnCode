s=0
for j in ({"Rise":2,"Leap":1,"Sink":-1,"Fall":-2,"Reset":0}[i] for i in input().split()):s=s+j if j!=0 else 0
print(s)