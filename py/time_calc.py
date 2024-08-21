stringer_ex1 = """0.00.00: <b>Emeli Sandé</b> - My Kind Of Love (Gemini Mix)<br>0.04.03: <b>Sonz Of A Loop Da Loop Era</b> - Far Out (Slag Brothers Mix)<br>0.05.42: <b>DJ Seduction</b> - Can You Feel It?<br>0.07.14: <b>Slipmatt & MK 1 ft. Ali</b> - Turn Me On<br>0.09.05: <b>Marina & The Diamonds</b> - Primadonna (Evian Christ Mix)<br>0.11.17: <b>Billy Bunter & Shimano ft. Karen Danzig</b> - How Am I?<br>0.13.32: <b>Criminal Minds</b> - Flynny’s Theme<br>0.16.09: <b>Criminal Minds</b> - Baptised By Dub<br>0.18.49: <b>SL2</b> - Make A Move<br>0.20.05: <b>LTJ Bukem</b> - Atlantis<br>0.23.07: <b>A Sense Of Summer</b> - On Top<br>0.25.28: <b>DJ Ham</b> - Is Anybody Out There?<br>0.27.04: <b>DJ Chewy</b> - Star Jump<br>0.28.37: <b>Urban Shakedown</b> - Some Justice '95<br>0.32.36: <b>Noise Factory</b> - Breakage #4<br>0.33.49: <b>M.A.2</b> - Hearing Is Believing<br>0.35.02: <b>Serial Killaz</b> - Put It On<br>0.38.23: <b>Serial Killaz</b> - Walk & Skank<br>0.40.08: <b>Serial Killaz</b> - Walk & Skank (Northern Lights Mix)<br>0.41.34: <b>SMD</b> - SMD #1A<br>0.42.26: <b>SMD</b> - SMD #2A<br>0.45.20: <b>Maverick Sabre</b> - I Used To Have It All (Delta Heavy Mix)<br>0.49.06: <b>SMD</b> - SMD#3 (Slipmatt & Kutski Mix)<br>0.51.05: <b>Rudimental ft. John Newman</b> - Feel The Love"""


# the below work with TLs in the format stringer_ex1


def get_times_ex1(tl_string):
    # times_lst = []
    times = [line[:7] for line in tl_string.split("<br>")]
    # times_lst.append(time)
    return times


def get_names_ex1(tl_string):
    tl_string = tl_string.replace("<b>", "").replace("</b>", "")
    names = [line[9:] for line in tl_string.split("<br>")]
    return names


def convert_to_seconds_ex1(times_list):
    return [
        int(hour) * 3600 + int(minute) * 60 + int(second)
        for hour, minute, second in [time.split(".") for time in times_list]
    ]


stringer = """0.00.00: <b>Emeli Sandé</b> - My Kind Of Love (Gemini Mix)<br>
0.04.03: <b>Sonz Of A Loop Da Loop Era</b> - Far Out (Slag Brothers Mix)<br>
0.05.42: <b>DJ Seduction</b> - Can You Feel It?<br>
0.07.14: <b>Slipmatt & MK 1 ft. Ali</b> - Turn Me On<br>
0.09.05: <b>Marina & The Diamonds</b> - Primadonna (Evian Christ Mix)<br>
0.11.17: <b>Billy Bunter & Shimano ft. Karen Danzig</b> - How Am I?<br>
0.13.32: <b>Criminal Minds</b> - Flynny’s Theme<br>
0.16.09: <b>Criminal Minds</b> - Baptised By Dub<br>
0.18.49: <b>SL2</b> - Make A Move<br>
0.20.05: <b>LTJ Bukem</b> - Atlantis<br>
0.23.07: <b>A Sense Of Summer</b> - On Top<br>
0.25.28: <b>DJ Ham</b> - Is Anybody Out There?<br>
0.27.04: <b>DJ Chewy</b> - Star Jump<br>
0.28.37: <b>Urban Shakedown</b> - Some Justice '95<br>
0.32.36: <b>Noise Factory</b> - Breakage #4<br>
0.33.49: <b>M.A.2</b> - Hearing Is Believing<br>
0.35.02: <b>Serial Killaz</b> - Put It On<br>
0.38.23: <b>Serial Killaz</b> - Walk & Skank<br>
0.40.08: <b>Serial Killaz</b> - Walk & Skank (Northern Lights Mix)<br>
0.41.34: <b>SMD</b> - SMD #1A<br>
0.42.26: <b>SMD</b> - SMD #2A<br>
0.45.20: <b>Maverick Sabre</b> - I Used To Have It All (Delta Heavy Mix)<br>
0.49.06: <b>SMD</b> - SMD#3 (Slipmatt & Kutski Mix)<br>
0.51.05: <b>Rudimental ft. John Newman</b> - Feel The Love"""


# the below work with TLs in the format stringer


def get_times(tl_string):
    # times_lst = []
    times = [line[:5] for line in tl_string.split("<br>")]
    # times_lst.append(time)
    return times


def get_names(tl_string):
    tl_string = tl_string.replace("<b>", "").replace("</b>", "")
    names = [line[6:] for line in tl_string.split("<br />")]
    return names


times = get_times_ex1(stringer_ex1)
print("Times:", times)

names = get_names_ex1(stringer_ex1)
print("Names:", names)


def convert_to_seconds(times_list):
    return [
        int(minute) * 60 + int(second)
        for (minute, second) in [time.split(":") for time in times_list]
    ]


converted_seconds = convert_to_seconds_ex1(times)
print("Converted seconds: ", converted_seconds)


def convert_to_strings(nums):
    return [str(num) for num in nums]


converted_times = convert_to_strings(converted_seconds)
print("Times as strings:", converted_times)


def zip_lists_with_string(list1, list2, char, char2):
    return [x + char + y + char2 for x, y in zip(list1, list2)]


output = zip_lists_with_string(converted_times, names, " | ", "\n")
print(output)

strings = [s.strip("'") for s in output]
outputs = " ".join(strings)
print(outputs)


# Iterate over the lists and insert the values into the HTML code
for i in range(len(converted_seconds)):
    # Split the name on the '-' character
    artist, title = names[i].split(" - ")

    # Build the HTML code with the time and name values
    html = f'<div class="track" onclick="updatePosition(this)" data-time="{converted_seconds[i]}"><b>{artist}</b> - {title}</div>'

    # Print the HTML code
    print(html)
