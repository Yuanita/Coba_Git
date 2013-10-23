#include
#include <srting.h>

int main (int argc, char ** argv)
{
	char nama [255];
	
	printf ("Masukkan Nama pertama Anda :");
	fgets (nama, 255, stdin);
	pertama [strlen (pertama) -1] = '\0'; /* menghapus baris diakhir */
	
	printf ("Sekarang masukkan Nama belakang Anda :");
	mendapat (terakhir); / * buffer overlow? apa itu ? * /
	
	printf ("Hello% s \ n", pertama, terakhir);
	return 0;
}
