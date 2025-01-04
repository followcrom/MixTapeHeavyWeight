stringer = """00:00 Run Tingz Cru ft. Blackout J.A & K.Ners - Informer (Northern Lights Jump Up Remix)<br>02:48 Modified Motion & Faction - 2 Bags Of Grass<br>04:55 Kleu - Oddball<br>07:27 Niney the Observer - Blood & Fire (Gella Remix)<br>10:25 RMS & DJ Hybrid - Too Bad<br>12:12 Conrad Dubs - Funk Me Sideways<br>14:05 Upgrade & Scudd - Gangbeasts<br>16:13 Vital Elements - Badda<br>17:49 Barrington Levy - Shine Eye Girl (Dope Ammo Remix)<br>19:56 Top Cat - Ruffest Gunark (Serial Killaz Remix)<br>21:36 Brian Brainstorm - Already Dead (Jungle Mix)<br>24:04 Breakage - As We Enter (Break Remix)<br>26:40 Supa Ape - Raggamuffin<br>29:02 Dub Pistols ft. Natty Campbell - Sound Sweet<br>31:48 Desmond Dekker & The Aces - 007 (Shanty Town) (Ed Solo Remix)<br>33:47 Conrad Subs - Stamina<br>36:27 4K & ALR - Brukshot (Aries & Kelvin 373 Remix)<br>38:12 Bladerunner - War Dub<br>40:24 Benny Page & Deekline ft. Gappy Ranks - Wartime<br>41:51 Jamalboy - Shout it Out<br>43:38 Benny Page ft. Mr. Williamz - Top Rank Skank<br>45:22 Ed Solo ft. MC Spyda - Soundsystem Entertainer<br>46:59 Annix - Crash<br>48:25 Benny Page - Rub A Dub<br>50:38 Benny Page - Crying Out<br>50:58 Blend Mishkin & Roots Evolution ft. Skarra Mucci - Original (Liondub Remix)<br>53:20 Psychofreud & Benny Page - Style & Fashion<br>55:54 Bukem & The Peshay - 19.5<br>58:41 K Jah - Supaclash<br>61:09 Rumble, Mr Lexx & Suku Ward - Gyalis (L-Side Remix)<br>63:30 Break It Up - High Roll<br>66:15 DJ Dextrous - Charged (Serial Killaz Remix)<br>69:09 Ellis x Triangle - Every Second (Jamie Bostron Remix)<br>71:59 Redlight - Coca Cola Bottle Shape"""


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
