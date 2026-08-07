#include <stdio.h>

int main() {
    int n, i, j;
    float x[20], y[20], value;
    float result = 0, term;

    printf("Enter number of data points: ");
    scanf("%d", &n);

    printf("Enter x and y values:\n");

    for(i = 0; i < n; i++) {
        printf("x[%d] = ", i);
        scanf("%f", &x[i]);

        printf("y[%d] = ", i);
        scanf("%f", &y[i]);
    }

    printf("Enter value of x to interpolate: ");
    scanf("%f", &value);

    for(i = 0; i < n; i++) {
        term = y[i];

        for(j = 0; j < n; j++) {
            if(i != j) {
                term = term * (value - x[j]) / (x[i] - x[j]);
            }
        }

        result = result + term;
    }

    printf("Interpolated value = %.4f\n", result);

    return 0;
}