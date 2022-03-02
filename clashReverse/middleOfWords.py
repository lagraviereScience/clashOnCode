import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

message = input()

# Write an answer using print
# To debug: print("Debug messages...", file=sys.stderr, flush=True)
a = ""
for i in message.split() :
    if len(i)%2 :
        a+=i[(len(i)//2)]
    else :
        a+=i[(len(i)//2)-1]
print(a)
