function gematria(num)	// Return Gimatria in Hebrew for the given number.
{
				
	num = Math.floor(num);
				
	if (num >= 1000)	return gematria(Math.floor(num / 1000)) + "'" + gematria(num % 1000);
				
	var a1 = Math.floor(num / 100);
	var a2 = Math.floor((num % 100) / 10);
	var a3 = num % 10;
				
	var s1 = ["","ק","ר","ש","ת","תק","תר","תש","תת","תתק"];
	var s2 = ["","י","כ","ל","מ","נ","ס","ע","פ","צ"];
	var s3 = ["","א","ב","ג","ד","ה","ו","ז","ח","ט"];
						
	var Gim = s1[a1] + s2[a2] + s3[a3];
				
	if (num % 100 == 15) 	Gim = s1[a1] + 'טו';
	if (num % 100 == 16) 	Gim = s1[a1] + 'טז';
	
	if (Gim.length > 1)		Gim = Gim.slice(0,-1) + '"' + Gim.slice(-1);
				
	return Gim;
}