#include <stdio.h>
#include <math.h>
float f(float x){
    return x*x+2*x-4;
}

float fx(float x){
    return 2*x+2;
}
int main(){
    float x0,x1,E=0.0001;
    int N = 100,i=0;
    printf("Enter value of X0:");
    scanf("%f",&x0);
    printf("Enter Maximum iteration:");
    scanf("%d",&N);

    for(i=0;i<N;i++){
        x1=x0-((f(x0))/(fx(x0)));

        if(fabs(x1-x0)<E){
            printf("root = %f",x1);
            break;
        }
        x0=x1;
    }


    return 0;
}