Dragons of Atlantis Wilderness Mapper
-------------------------------------

So, you want to find level 10s (or any other level of wilds) near predefined coordinates.

When the game is loaded, a file called 'map.bin' is prefetched. 
This file contains one whole realm of coordinates regarding wilds, cities and their level. (not ownership - although you 
can fetch that too, using the tile_at.json API call, if you know how to use it.)

The file can be easily found in your browser's cache.
OR
just point to a realm's full address (http://realm291.c13.castle.wonderhill.com/map.bin) < It's not protected, you can get the map.bin for all realms without authentication.

This small yet useful .php file reads the map.bin, and outputs (can be put in Sql for all your needs) all of
the realm coordinates in format XY, and the wild type/level.

Kabam did not encrypt this file with any algorithm, and its decoding is fairly easy.

Usage: just place map.bin in the same directory as map.php and run it.

Example output for Realm Mesite: (the binary corresponds to the decoding - if you don't know what it is, then ignore it.)

Bugs: 'level' of cities is incorrect. Blame Kabam. :P

start: 2013-06-29 03:31:29
-     0- [0 x 0]  ctype[  mountain] level[ 6]   100110x 1 [x000 y000]
-     1- [0 x 1]  ctype[      hill] level[10]  1001010x 2 [x000 y001]
-     2- [0 x 2]  ctype[      city] level[ 2]  1110010x 3 [x000 y002]
-     3- [0 x 3]  ctype[      city] level[ 4]  1110100x 4 [x000 y003]
-     4- [0 x 4]  ctype[     plain] level[ 5]    10101x 5 [x000 y004]
-     5- [0 x 5]  ctype[      lake] level[ 3]  1100011x 6 [x000 y005]
-     6- [0 x 6]  ctype[    savana] level[ 4]  1010100x 7 [x000 y006]
-     7- [0 x 7]  ctype[     plain] level[ 2]    10010x 8 [x000 y007]
-     8- [0 x 8]  ctype[    anthro] level[11] 10001011x 9 [x000 y008]
-     9- [0 x 9]  ctype[    anthro] level[ 1] 10000001x 10 [x000 y009]
-    10- [0 x 10]  ctype[      city] level[10]  1111010x 11 [x000 y010]
-    11- [0 x 11]  ctype[    savana] level[10]  1011010x 12 [x000 y011]
-    12- [0 x 12]  ctype[      city] level[ 9]  1111001x 13 [x000 y012]
-    13- [0 x 13]  ctype[      city] level[ 1]  1110001x 14 [x000 y013]
-    14- [0 x 14]  ctype[      hill] level[ 3]  1000011x 15 [x000 y014]
-    15- [0 x 15]  ctype[    savana] level[ 1]  1010001x 16 [x000 y015]

(etc etc, until 749x749)

Note: the map.bin file contains the whole 750x750 (0-749x0-749) coordinates (562500 tiles total), and the first 2 bytes are bogus. 
Yes, 2 full bytes! That's the whole range of Kabam's attempt at protecting this file's data.
So, the map.bin file has 562502 bytes. Duh.

Shoutouts: Semper Fi, Godric, Dragon Reborn.
