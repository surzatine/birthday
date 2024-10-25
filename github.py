import os


def cmd(parameter):
    result = os.system(parameter)
    print(result)




# --- File Appending ---
def append_to_file(filename, text_to_append):


    try:
        with open(filename, 'a') as file:
            file.write(text_to_append)
        print(f"Successfully appended to '{filename}'")
    except FileNotFoundError:
        print(f"Error: File '{filename}' not found.")

# Example usage:
os.chdir("C:\\xampp\\htdocs\\me_user\\birthday")
cmd("ls")
append_to_file("bd.md", "  ")

cmd("git add .")
cmd("git commit -m 'commit'")
cmd("git push")