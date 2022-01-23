<h> Planning</h>
</b>Read the existing svxlink.conf file into an array. Search the array for the fixed parameters such as callsign, node-type, CTCSS, Reflector connectivity,
Parrot, EchoLink, MetarInfo modules, language, soundcard. Future consideration to be given to Darkice and Icecast2 connectivity.
Consideration for secondary system parameters such as levels and timing.
</b>First read in the svxlink.conf into an array, This may be preconfigured or unconfigured. The svxlink-raspberry script adds a callsign in the parameters, but that is all. 

</b>An array of standard parameters for SimplexLogic, ReflectorLogic, and RepeaterLogic must be available to swap into the array on selection.
