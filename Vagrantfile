Vagrant.configure("2") do |config|
  config.vm.box = "hashicorp/bionic64"

  config.vm.define "web1" do |web1|
    web1.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
  end

  config.vm.provision :ansible_local do |ansible_local|
    ansible_local.playbook = 'provisioning/playbook.yml'
    ansible_local.groups = {
      "webservers" => ["web1"]
    }
  end
end