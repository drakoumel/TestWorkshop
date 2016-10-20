# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.hostname = "php7dev"
  config.vm.network :private_network, ip: "10.10.0.11"
  config.vm.synced_folder ".", "/var/www"

  config.vm.provision "shell", inline: <<-SHELL
    sudo add-apt-repository ppa:ondrej/php
    sudo apt-get update
    sudo apt-get -y install php7.1 php7.1-json php7.1-phar php7.1-cli
  SHELL
end
