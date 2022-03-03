const n = parseInt(readline());

for (i=1; i<=n; i++){
    r = '';
    if (i%3==0) r+='Fizz'
    if (i%5==0) r+='Buzz'
    if (i%4==0) r+='Bar'
    print(r==''? i : r)
}

