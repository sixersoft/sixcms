import os
from fontTools.subset import main as subset_main

def compress_variable_font(input_file, output_file):
    if not os.path.exists(input_file):
        print(f"File not found: {input_file}")
        return

    # Basic Latin (English uppercase, lowercase, numbers, basic punctuation)
    # Range: U+0020 to U+007E (Plus extra required symbols like U+2014, U+2026, etc.)
    unicode_range = "U+0020-007E,U+2000-206F,U+2070-209F,U+20A0-20CF"

    args = [
        input_file,
        f"--unicodes={unicode_range}",
        f"--output-file={output_file}",
        "--flavor=woff2",               # Output modern WOFF2 format
        "--layout-features=*",          # Keep all OpenType features & variable font axes (wght, opsz, etc.)
        "--no-hinting",                 # Decreases file size further while maintaining web display quality
        "--desubroutinize"
    ]

    print(f"Optimizing {input_file}...")
    subset_main(args)
    print(f"--> Saved to: {output_file}\n")

# আপনার ৩টি ফাইল কাস্টমাইজড করে সাবসেট করা
fonts = [
    ("ClashDisplay-Variable.ttf", "ClashDisplay-Variable.woff2"),
    ("DMSans-VariableFont_opsz,wght.ttf", "DMSans-Variable.woff2"),
    ("DMSans-Italic-VariableFont_opsz,wght.ttf", "DMSans-Italic-Variable.woff2")
]

for src, dist in fonts:
    compress_variable_font(src, dist)
