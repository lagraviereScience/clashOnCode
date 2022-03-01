import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

n = int(input())
for i in range(n):
    side = (n-i)*'.'
    stars = i*2+1
    print(side+stars*'*'+side)
print(n*'.'+'*'+n*'.')
