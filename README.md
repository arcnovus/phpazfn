# PHP Azure Function Example

This is a simple example of a PHP Azure Function.

## Prerequisites

- [Azure Functions Core Tools](https://learn.microsoft.com/en-us/azure/azure-functions/functions-run-local?tabs=v4%2Cwindows%2Ccsharp%2Cportal%2Cbash#install-the-azure-functions-core-tools)
- [PHP](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [Azurite](https://learn.microsoft.com/en-us/azure/storage/common/storage-use-azurite?tabs=visual-studio-code#install-azurite)
- [Azure CLI](https://docs.microsoft.com/en-us/cli/azure/install-azure-cli?view=azure-cli-latest)

## Instructions

### 1. Create a file in the root folder called `local.settings.json` with the following content:

```json
{
  "IsEncrypted": false,
  "Values": {
    "FUNCTIONS_WORKER_RUNTIME": "custom",
    "AzureWebJobsStorage": "UseDevelopmentStorage=true"
  }
}
```

### 2. Run `php composer.phar install` to install the dependencies.

### 3. Start Azurite

- In Visual Studio Code, run the `Azurite: Start` command.
- On Windows, run `azurite.cmd` from the Azurite installation folder.
- On Linux, run `azurite` from the Azurite installation folder.

### 4. Run `func start` to start the function.

### 5. After 1 minute, the function should print something like the following message to the terminal:

```text
[YYYY-MM-DDTHH:MM:SS.sssssss+00:00] serverless.INFO: Timer trigger invoked
```
