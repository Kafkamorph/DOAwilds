Dragons of Atlantis Wilderness Mapper
-------------------------------------

So, you want to find level 10s near predefined coordinates.

When the game is loaded, a file called 'map.bin' is prefetched. 
This file contains one whole realm of coordinates regarding wilds and their level (not ownership).

The file can be easily found in your browser's cache.

This small yet useful .php file reads the map.bin, and outputs (can be put in Sql for all your needs) all of
the realm coordinates in format XY, and the wild type/level.

Kabam did not encrypt this file with any algorithm, and its decoding is fairly easy.