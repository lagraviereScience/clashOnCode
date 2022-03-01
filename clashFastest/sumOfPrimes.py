n=int(input())
p=2
f=[]
while p*p<=n:
    if n%p:
        p+=1
    else:
        n//=p
        f.append(p)
if n>1:
    f.append(n)
print(sum(f))