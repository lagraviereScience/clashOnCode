i=input
a,b,*c=i()
x,y=ord(a)-97,ord(b)-49
if c or(0<=x<8)+(0<=y<8)!=2:i("INVALID")
i(chr(104-x)+chr(56-y))