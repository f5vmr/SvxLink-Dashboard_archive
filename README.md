<br />
<p align="center">

  <h3 align="center">SvxLink-Dashboard</h3>

  <p align="center">
    A simple dashboard for an SvxLink server!
    <br />
    <br />
    
  </p>
</p>

## Table of Contents

* [About the Project](#about-the-project)
  * [Built With](#built-with)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Roadmap](#roadmap)
* [Contributing](#contributing)
* [License](#license)
* [Contact](#contact)

## About The Project

This project aims to provide a simple dashboard for [SvxLink](https://www.svxlink.org) to monitor the system status, module status, and log viewing, with added capability to change parameters and monitor the talkgroups sent to svxreflector. It is still under development but it will become available very soon. Please do not attempt to clone or download yet, as some major changes will be made in the next few days that may render the existing repository less than helpful. You will see changes to this text when the new phases are complete.

### Built With
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)
* [PHP](https://www.php.net)

## Getting Started

This should be as simple as cloning the repo into your webserver, editing the configuration file, and browsing to the index page.

### Prerequisites

* A webserver on the SvxLink Server. Raspberry OS (Buster Lite) already has lighttpd installed.
* PHP (developed using version 7.3) see the instruction below following a sudo apt update and sudo apt upgrade.
* sudo apt install -y php7.3 php7.3-cli php7.3-json php7.3-curl php7.3-gd php7.3-bcmath php7.3-cgi php7.3-ldap php7.3-mbstring php7.3-xml php7.3-soap php7.3-xsl php7.3-zip

### Installation

1. Clone the repo to your webserver that is to say cd /var/www
```sh
git clone https://github.com/f5vmr/SvxLink-Dashboard.git html
```
2. cd to html then edit the constants in config/config.php to suit your install
3. ?????
4. Profit! :)

## Roadmap

See the [open issues](https://github.com/f5vmr/SvxLink-Dashboard/issues) for a list of proposed features (and known issues).

## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the GPL 3.0 License. See `LICENSE` for more information.

## Contact
Chris Jackson (g4nab.ne63@gmail.com)

Project Link: [https://github.com/f5vmr/SvxLink-Dashboard](https://github.com/f5vmr/SvxLink-Dashboard)
