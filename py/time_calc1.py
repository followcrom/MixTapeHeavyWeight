stringer_ex1 = """0:00:00 <b>Etta James</b> - Leave Your Hat On (Funk Ferret Edit)<br>0:03:13 <b>The Meters</b> - Cissy Strut (D-Funk Edit)<br>0:05:34 <b>Father Funk</b> - Gotta Be Me<br>0:08:33 <b>Marky & XRS ft. Stamina MC</b> - LK ( J Sound Edit)<br>0:10:58 <b>Wu-Tang Clan</b> - Da Mystery Of Chessboxin' (Gram of Fun Edit)<br>0:12:49 <b>Basement Freaks</b> - Insane Brains<br>0:15:40 <b>Phibes</b> - Hold On<br>0:18:30 <b>Extra Medium & Mr Switch</b> - Swinggae<br>0:20:45 <b>N.O.R.E</b> - Nothin' (DJ Scene Mix)<br>0:22:12 <b>WBBL</b> - Danger Machine<br>0:24:23 <b>Bobby McFerrin</b> - Thinking About Your Body (J-Sound Edit)<br>0:25:50 <b>Bobby McFerrin</b> - Don't Worry Be Happy (Father Funk Edit)<br>0:28:37 <b>Leo</b> - You<br>0:30:53 <b>J Sound</b> - Boss DAT!<br>0:32:43 <b>J Sound</b> - On & On<br>0:34:31 <b>Father Funk & Howla</b> - Got Swing<br>0:36:11 <b>Dancefloor Outlaws</b> - Panda<br>0:37:35 <b>Moby</b> - Run On (WBBL Mix)<br>0:39:31 <b>Cockney Nutjob</b> - Firepower<br>0:41:58 <b>Leo</b> - Lovin'<br>0:43:12 <b>J Sound</b> - Funky Flow<br>0:45:08 <b>Lakeshore Drive</b> - Two For The Crates<br>0:46:33 <b>Sammy Senior & WBBL</b> - Soul Rocka<br>0:48:55 <b>WBBL</b> - Penguin Funk<br>0:51:25 <b>Cockney Nutjob</b> - The Master<br>0:54:36 <b>Sammy Senior</b> - Alright Now<br>0:55:55 <b>Aaron Neville v Big L</b> - Hercules 2012 (BadboE Mash-Up)<br>0:58:11 <b>Father Funk</b> - Gringo Lingo<br>1:01:25 <b>The Specials</b> - A Message to You Rudy (J-Sound Edit)<br>1:03:20 <b>Kotch</b> - Funk Out<br>1:04:27 <b>Cat in the Hat ft. Mr Switch</b> - Sax Party<br>1:06:57 <b>Father Funk</b> - Hell Yeah<br>1:09:10 <b>Lack Jemmon</b> - Hello World Hello Lorde<br>1:12:55 <b> Chopstick Dubplate ft. Top Cat & Mr Williamz</b> - Worldwide Traveller"""


# the below work with TLs in the format stringer_ex1


def get_times_ex1(tl_string):
    # times_lst = []
    times = [line[:7] for line in tl_string.split("<br>")]
    # times_lst.append(time)
    return times


def get_names_ex1(tl_string):
    tl_string = tl_string.replace("<b>", "").replace("</b>", "")
    names = [line[8:] for line in tl_string.split("<br>")]
    return names


def convert_to_seconds_ex1(times_list):
    return [
        int(hour) * 3600 + int(minute) * 60 + int(second)
        for hour, minute, second in [time.split(":") for time in times_list]
    ]


times = get_times_ex1(stringer_ex1)
print("Times:", times)

names = get_names_ex1(stringer_ex1)
print("Names:", names)


converted_seconds = convert_to_seconds_ex1(times)
print("Converted seconds: ", converted_seconds)


def convert_to_strings(nums):
    return [str(num) for num in nums]


converted_times = convert_to_strings(converted_seconds)
# print("Times as strings:", converted_times)


def zip_lists_with_string(list1, list2, char, char2):
    return [x + char + y + char2 for x, y in zip(list1, list2)]


output = zip_lists_with_string(converted_times, names, " | ", "\n")
# print(output)

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
