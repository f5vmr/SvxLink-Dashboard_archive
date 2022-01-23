<p><h1> Planning</h1></p>
<p>Read the existing svxlink.conf file into an array. Search the array for the fixed parameters such as callsign, node-type, CTCSS, Reflector connectivity,
Parrot, EchoLink, MetarInfo modules, language, soundcard. Future consideration to be given to Darkice and Icecast2 connectivity.</p>
<p>Consideration for secondary system parameters such as levels and timing.</p>
<p>First read-in the svxlink.conf into an array, This may be preconfigured or unconfigured. The svxlink-raspberry script adds a callsign in the parameters, but that is all.</p> 
<p>An array of standard parameters for SimplexLogic, ReflectorLogic, and RepeaterLogic must be available to swap into the array on selection.</p>
<p>Display the changeable parameters and current content, with clickeable dropbox options to either leave the current content or replace with the desired option.</p>

<p>All achievable in PHP7.3, an essential part of the compilation on the raspberry (debian) install. <p>
<h3>Components from php</h3>
<p><b>readfile(file, include_path, context)</b>  The number of bytes read on success, FALSE and an error on failure. You can hide the error message by adding an '@' in front of the function name</p>
<p> Filenames and paths are already defined, so we can read into an array the current svxlink.conf file without displaying it yet.</p>
<p>Thinking outloud, if we are making a new node or changing an existing node we need to start by asking the questions thusly.</p>
<p><i>1. What is your intended callsign?</i> - Check and verify the callsign is correctly formatted. Save the callsign.</p>
<p><i>2. Do you require a simplex/repeater node?<i> - Provide a dropdown box selection. Incorrect choice not acceptable.</p>
<p><i>3. Do you wish a reflector connection?</i> - If yes provide an option for svxportal-uk.ddns. Default protocol. Make changes to the [Global] in svxlink.conf that then changes to the correct LogicSection will begin.</p>
<p>Depending on the results of 1, 2 and 3, the next stages will require modification according to these activated sections.</p>  
