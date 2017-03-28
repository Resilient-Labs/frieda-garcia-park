# Frieda Garcia Park Wordpress Development

This repository is an example of how to integrate and use the following projects together:

* [Bedrock](https://github.com/roots/bedrock)
* [Trellis](https://github.com/roots/trellis)
* [Sage](https://github.com/roots/sage) (with [Soil](https://github.com/roots/soil))

For more background, see this [blog post](https://roots.io/a-modern-wordpress-example/).


## Requirements

Make sure you have installed all of the dependencies for [Trellis](https://github.com/roots/trellis#requirements), [Bedrock](https://github.com/roots/bedrock#requirements) and [Sage](https://github.com/roots/sage#requirements) before moving on.

At a minimum you need to have:

* [Ansible](http://docs.ansible.com/ansible/intro_installation.html#latest-releases-via-pip) == 2.0.2.0
* [Virtualbox](https://www.virtualbox.org/wiki/Downloads) >= 4.3.10
* [Vagrant](https://www.vagrantup.com/downloads.html) >= 1.8.5
* [vagrant-bindfs](https://github.com/gael-ian/vagrant-bindfs#installation) >= 0.3.1 (Windows users may skip this)
* [vagrant-hostmanager](https://github.com/smdahlen/vagrant-hostmanager#installation)
* [Node.js](http://nodejs.org/) >= 4.5.0
* [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md) >= 3.8.10
* [Bower](https://github.com/bower/bower/blob/master/README.md#install) >= 1.3.12

## Local development Workflow
1. ** Fire up the server** (be patient, but watch the console––it may prompt for your system password)
  ```shell
  # @ frieda-garcia-park.com/trellis (you must cd to this path)
  $ vagrant up
  ```
2. ** In the browser, test the install** at [frieda-garcia-park.dev](http://frieda-garcia-park.dev/)

## Remote server setup (staging/production)

### Provision server:
```shell
# @ frieda-garcia-park.com/trellis
$ ansible-playbook server.yml -e env=<environment>
```

### Deploy:
```shell
# @ frieda-garcia-park.com/trellis
./deploy.sh <environment> frieda-garcia-park.com

# OR
ansible-playbook deploy.yml -e "site=frieda-garcia-park.com env=<environment>"
```

**To rollback a deploy:**
```shell
ansible-playbook rollback.yml -e "site=frieda-garcia-park.com env=<environment>"
```

## Theme development

In **development**, run gulp in _watch_ mode for live updates at [localhost:3000](http://localhost:3000). **Important**: always use the [frieda-garcia-park.dev](http://frieda-garcia-park.dev/wp/wp-admin/) URL to access the WordPress admin.
```shell
# @ frieda-garcia-park.com/site/web/app/themes/sage
$ gulp watch
```

**Production** assets (minified CSS, JavaScript, images, fonts, etc.) need to be compiled. Run gulp with the `--production` flag. The resulting files will be saved in `themes/sage/dist/`. Never edit files in the `dist` directory.

```shell
# @ frieda-garcia-park.com/site/web/app/themes/sage
$ gulp --production
```
