# Learning Codeigniter

In this repository I will be learning Codeigniter. I will be following the [Codeigniter Tutorial Playlist](https://www.youtube.com/playlist?list=PL97P2RbKWLQgkc4EXn7FBj_R6t0gsgHKo) and documenting my progress here.

## Installation

1. Download the version 3 of Codeigniter from [here](https://codeigniter.com/download).
2. Extract the downloaded file and rename the folder to `codeigniter`.
3. Move the folder to the `htdocs` folder of your XAMPP installation.
4. Open the `config.php` file located in `codeigniter/application/config` and change the `$config['base_url']` to `http://localhost/codeigniter/`.
5. Open the `autoload.php` file located in `codeigniter/application/config` and add `database` to the `$autoload['libraries']` array.
6. Open the `database.php` file located in `codeigniter/application/config` and change the `$db['default']['username']` to `root` and `$db['default']['password']` to `''`.

