stringer = """00:00 Veak - The Original<br>02:00 Marcus Visionary ft. Hopeton James - Number 1 Sound<br>03:28 Desmond Dekker & The Aces - Israelites (JFB Remix)<br>05:40 Isaac Maya - Sound Di Alarm ft. King Toppa & Gento Jamal<br>07:36 Chopstick Dubplate ft. Ragga Twins & Bunny Lye Lye - Give Me a Dubplate<br>10:41 Brian Brainstorm & Ricky Tuff - Gunshot<br>12:31 Sikka - Alright<br>14:44 DJ Hybrid - Rune Tune Now (Formula Remix)<br>16:56 Shumba Youth & Sleepy Time Ghost - Right Way (Aries & Nicky Blackmarket Remix)<br>19:50 Herve - Together (Deekline & Benny Page Remix)<br>22:45 DJ Brockie ft. MC Det - BBC<br>25:20 Veak - Resistant<br>27:31 JFB - Shake It<br>29:30 Serial Killaz - Put It On<br>31:32 Uzimon - The Rum Anthem (Father Funk Remix)<br>35:25 Rumble ft. Junior Dangerous - I Like (Liondub & Chatta B Remix)<br>38:18 Marcus Visionary ft. Sugar Minott - Ruff & Tuff (Rollers Mix)<br>40:30 Ricky Tuff - Good Ol' Days<br>42:41 Marcus Visionary ft. Pad Anthony - Murder<br>44:55 Origin8a & Propa ft. Benny Page - Harmony (Instrumental)<br>47:59 Benny Page ft. Topcat - Sound Fi Dead (Aries & Tuffist Remix)<br>50:31 Brian Brainstorm - So Easy<br>53:41 Kumo - Signal<br>55:08 Delly Ranx - Move Left The Crowd (Jamie Bostron Remix)<br>57:50 Rise - Respect<br>58:48 Ed Solo ft. General Levy - Junglist<br>60:59 Luciano - Computerize (Jamie Bostron Remix)<br>62:40 Chopstick Dubplate ft. General Jah Mikey - My Sound Ah Murda<br>65:00 Wrongtom - Jump + Move + Rock (Benny Page Remix)<br>66:30 Dave & Ansel Collins - Double Barrel (Ed Solo Remix)<br>68:41 Dub Pistols ft. Natty Campbell - Wicked & Wild (King Yoof Remix)<br>70:44 LTJ Bukem - Atlantis (Marky & S.P.Y. Rework)"""


# the below work with TLs in the format stringer

def get_times(tl_string):
    # times_lst = []
    times = [line[:5] for line in tl_string.split("<br>")]
    # times_lst.append(time)
    return times


def get_names(tl_string):
    tl_string = tl_string.replace("<b>", "").replace("<b>", "")
    names = [line[6:] for line in tl_string.split("<br>")]
    return names


times = get_times(stringer)
print("Times:", times)

names = get_names(stringer)
print("Names:", names)


def convert_to_seconds(times_list):
    return [
        int(minute) * 60 + int(second)
        for (minute, second) in [time.split(":") for time in times_list]
    ]


converted_seconds = convert_to_seconds(times)


def convert_to_strings(nums):
    return [str(num) for num in nums]


converted_times = convert_to_strings(converted_seconds)


def zip_lists_with_string(list1, list2, char, char2):
    return [x + char + y + char2 for x, y in zip(list1, list2)]


output = zip_lists_with_string(converted_times, names, " | ", "\n")


strings = [s.strip("'") for s in output]
outputs = " ".join(strings)
print(outputs)


# Iterate over the lists and insert the values into the HTML code
for i in range(len(converted_seconds)):
    # Split the name on the '-' character
    artist, title = names[i].split(" - ")

    # Build the HTML code with the time and name values
    html = f'<div class="track" onclick="updatePosition(this)" data-time="{converted_seconds[i]}"><b>{artist}<b> - {title}</div>'

    # Print the HTML code
    print(html)
