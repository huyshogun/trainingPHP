#include <stdio.h>
#include <string.h>
int main () {
	char DS[100][30], str[30];
	int N;
	printf("So sinh vien: "); scanf("%d", &N); fflush(stdin);
    for (int i = 0; i < N; i++) {
    	printf("\nTen sinh vien [%d]", i); gets(DS[i]);
    	}
    
	for (int i = 0; i < N-1; i++) {
		for (int j = i + 1; j < N; j++) {
			if(strcmp(DS[i], DS[j]) > 0) {
				strcpy(str, DS[i]);
				strcpy(DS[i], DS[j]);
				strcpy(DS[j], str);
				}
				}
				}
    printf("\nNhap day vua moi duoc sap xep"); 
    for(int i = 0; i < N; i++) {
    	printf("\n%s", DS[i]);
    	}
    
	}
		
	
