# Linux.cn Over Laravel


## Packages

- joelbutcher/socialstream: for social login 
- beyondcode/laravel-server-timing: for server timing api & performance review
- "laravel-lang/common: for lang files update


## external file

- `deploy.sh`: for production server load file via webhook

## API Docs

see in `https://postman.com/linuxcn/workspace/linux-cn`


## Ops Command

### requirements

```shell
composer require global laravel/envoy
```

### Command list

- `envoy run update`: update code only, for some change only logic
- `envoy run deploy`: update view/config/routes, or have migrate
- `envoy run migrate`: only migrate
- `envoy run ssh`: change to ssh
