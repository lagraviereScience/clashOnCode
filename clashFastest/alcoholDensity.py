import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

m = float(input())
v = float(input())
v2 = (v - m) / 0.21

print(str(round((v2/v)*100))+'%')
