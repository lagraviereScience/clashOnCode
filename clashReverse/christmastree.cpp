#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

int main()
{
    int n;
    cin >> n; cin.ignore();

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    int w = n * 2 + 1;

    for (int i = 1; i <= n; i++) {
        int x = i * 2 - 1;
        int r = w - x;
        cout << string(r / 2, '.') << string(x, '*') << string(r / 2, '.') << endl;
    }

    cout << string(w / 2, '.') << "*" << string(w / 2, '.') << endl;
}