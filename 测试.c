#include<stdio.h>
int main()
{
	int a;
	printf("���������\n");
		scanf("%d", &a);
		if (a % 100 != 0 && a % 4 == 0 || a % 400 == 0)
			printf("%d ��������",a);
		else
			printf("%d ��������",a);
		return 0;
}
