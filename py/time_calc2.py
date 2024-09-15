stringer = """00:00 Top Cat - Champion DJ (Shy FX Mix)<br>02:35 Shout - Can't Satisfy Her<br>04:14 The Harry J All Stars - Liquidator (Ed Solo Remix)<br>06:47 Blend Mishkin ft. Peppery - Foundation Style (Danny T, Tradesman & Jakey Banton Mix)<br>08:26 Liondub - Foundation Special<br>10:06 Breakage - Ric Flair Strut<br>12:17 General Levy - Guide & Protect (Ed Solo Remix)<br>14:30Junior Murvin - Cool Out Son (Brian Brainstorm Remix)<br>17:02 Slynk - Bad Duppy Walk<br>19:37 Deekline - Alibaba<br>21:26 Chopstick Dubplate ft. Cheshire Cat - I'm Sure<br>23:58 Ed Solo and Deekline - Untold<br>26:32 Mr Vegas, Burro Banton, Carl Meeks, Lukie D & Fuzzy Jones - Sound Exterminata (Ricky Tuff Mix)<br>28:46 Cutty Ranks - Limb By Limb (DeJedi Remix)<br>30:54 Uzi & Veak - Young Gal Want<br>32:46 Marcus Visionary - Hide & Seek<br>36:03 Bluntskull & Liondub - Dancehall Terrorist (2020 Remix)<br>38:26 Supa Ape - Destroy Dem<br>40:59 Conrad Subs - The Rhythm<br>42:38 Junior Kelly - Love So Nice (Ted Ganung Remix)<br>44:16 Jimi Needles - Na Na Na<br>46:34 K Jah - Get Out Of My Life<br>48:38 Deekline & Freestylers - Ray Gun<br>50:50 Cocoa Tea - Soundclash (Jamie Bostron Remix)<br>52:42 RMS & Dublic - Soundboy Test<br>54:40 Marcus Visionary ft. Little John - Run For Cover<br>56:41 A-Zone ft. Aphrodite - Calling The People (2020 Jungle Mix)<br>59:47 DJ Cautious - Tickle<br>61:48 Brian Brainstorm ft. Speaker Louis - Soldier Man<br>64:44 FeyDer & Steppa Style ft. Nappy Paco - Kill Dem Again"""


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
