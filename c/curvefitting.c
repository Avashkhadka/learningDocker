#include <stdio.h>

int main() {
    int n, i;
    float x[100], y[100];
    float sumX = 0, sumY = 0;
    float sumXY = 0, sumX2 = 0;
    float a, b;
    // Least square method
    printf("Enter number of data points: ");
    scanf("%d", &n);

    for (i = 0; i < n; i++) {
        printf("Enter x and y: ");
        scanf("%f %f", &x[i], &y[i]);

        sumX += x[i];
        sumY += y[i];
        sumXY += x[i] * y[i];
        sumX2 += x[i] * x[i];
    }

    b = (n * sumXY - sumX * sumY) /
        (n * sumX2 - sumX * sumX);

    a = (sumY - b * sumX) / n;

    printf("Best fit equation:\n");
    printf("y = %.4fx + %.4f\n", b, a);

    return 0;
}