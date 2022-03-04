import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

a = int(input())
b = int(input())

# Write an answer using print
# To debug: print("Debug messages...", file=sys.stderr, flush=True)
for i in range(10000):
    if (a**2+b**2 == i**2):
        print(i)
        exit()
    if (a**2+i**2 == b**2):
        print(i)
        exit()
    if (b**2+i**2 == a**2):
        print(i)
        exit()
print("IMPOSSIBLE")
