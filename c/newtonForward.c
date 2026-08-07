#include <stdio.h>

int main() {
    int n, i, j;
    float x[20], y[20][20], value, h, p, sum, term;

    printf("Enter number of data: ");
    scanf("%d", &n);

    printf("Enter x and y values:\n");
    for(i = 0; i < n; i++) {
        scanf("%f %f", &x[i], &y[i][0]);
    }

    // Difference table
    for(j = 1; j < n; j++) {
        for(i = 0; i < n - j; i++) {
            y[i][j] = y[i + 1][j - 1] - y[i][j - 1];
        }
    }

    printf("Enter interpolation value: ");
    scanf("%f", &value);

    h = x[1] - x[0];
    p = (value - x[0]) / h;

    sum = y[0][0];
    term = 1;

    for(i = 1; i < n; i++) {
        term = term * (p - (i - 1)) / i;
        sum = sum + term * y[0][i];
    }

    printf("Interpolated value = %.4f\n", sum);

    return 0;
}