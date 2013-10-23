#include
#include <srting.h>

int main (int argc, char ** argv)
{
	char nama [255];
	
	printf ("Masukkan Nama Anda :");
	fgets (nama, 255, stdin);
	printf ("panjang =% d \ n", strlen (nama)); / * debug baris */
	Nama [strlen (nama) -1] = '\0'; /* menghapus baris diakhir */
	
	printf ("Hello% s \ n", nama);
	return 0;
}
