>Installation:
sudo apt-get install virtualbox
sudo apt-get install vagrant
sudo apt-get install virtualbox-dkms
sudo apt-get install ansible - Ansible

>Add virtual the base and common image - box.
vagrant box add precise32 http://files.vagrantup.com/precise32.box

>To init vagrant at first.
vagrant init hashicorp/precise32
Check the image settings
config.vm.box = "precise32"

>Connect using SSH:
vagrant ssh

>Remove all traces of it
vagrant destroy.

>To install a box.
vagrant box add hashicorp/precise32
>The list of boxes.
https://atlas.hashicorp.com/boxes/search

> Set a box in the config file.
config.vm.box = "hashicorp/precise32"

>Support the folder sync.
config.vm.synced_folder "../data", "/vagrant_data"

>When Provisioning Happens
- At the first vagrant up.
- vagrant up --provision
- vagrant provision  -  is used on a running environment.
- vagrant reload --provision  -  Force.

>The provisioning script is stored.
Use the settings  -  config.vm.provision :shell, path: "bootstrap.sh"
bootstrap.sh

>Teardown
vagrant suspend - Save :)
vagrant up - Wakes up or Installs everytinh again.
vagrant halt - Reset
vagrant destroy - Destroy. Next time you need install again.

>Attach ansible
ansible.playbook = "provisioning/playbook.yml"

>As of Vagrant 1.5, the machine name (taken from Vagrantfile) is set as default limit to ensure that vagrant provision steps only affect the expected machine. Setting ansible.limit will override this default.

