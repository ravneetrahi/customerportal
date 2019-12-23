GulpJS:
=================================

Suite Portal supports Gulpjs for developers who wants to contribute to the project.

## Installation

1. Navigate the the root folder of the project.
2. Make sure NodeJS is installed. You can check it with the command `node -v` in the terminal.
3. Run `npm install`.
4. After that you can run `gulp help.`

If you see a terminal output without errors then is gulp successfully installed.

## GulpJS commands.

The following commands are included:

| Task name:                     | Description:                                         |
| :----------------------------- | :--------------------------------------------------- |
| `gulp Dependencies:check`      | Check if the NodeJS packages are the latest version. |
| `gulp Dependencies:update`     | Update the NodeJS packages to the latest version.    |
| `gulp clean`                   | Truncate the public resources. (assets)              |
| `gulp default`                 | The default task.                                    |
| `gulp help`                    | Display the help console for the gulp tasks.         |
| `gulp move-fonts`              | Move the fonts to the public directory.              |
| `gulp sass`                    | Convert the scss files to css and publish them.      |
| `gulp watch`                   | Watch for changes during the dev of this project.    |
