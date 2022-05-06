# Project Title: Post QR code wordpress plugin

## Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Filter Hooks](#fhooks)

## About <a name = "about"></a>

- This is a practice project on my way to learning wordpress.
- Creates a Qr code of the post url, display under the post, which can be scaned using QR code scanner

## Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. Feel free to use the code

### Prerequisites

Your machine needs to have wordpress installed

### Installing

- Clone the repo from github or download zip

```
git clone https://github.com/mnm-54/wp-post_to_QRcode_plugin
```

And activate the plugin from admin dashboard.

## Filter Hooks <a name = "fhooks"></a>

- pqrc_excluded_post_types: returns a array of excluded post ypes
- pqrc_qrcode_dimension: length of the one side of qr code
- pqrc_img_attributes: for adding extra img tag attributes
