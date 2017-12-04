FROM elixir:slim
MAINTAINER sharils <sharils@users.noreply.github.com>

RUN set -xe \

    # Here’s the command to install Hex
    && mix local.hex --force \

    # Phoenix
    && mix archive.install --force https://github.com/phoenixframework/archives/raw/master/phx_new.ez \

    # node.js (>= 5.0.0)
    && buildDeps=' \
       curl \
    ' \
    && apt-get update \
    && apt-get install -y --no-install-recommends $buildDeps \
    && apt-get install -y --no-install-recommends ca-certificates \
    && curl -sL https://deb.nodesource.com/setup_8.x | bash - \
    && apt-get install -y nodejs \
    && apt-get purge -y --auto-remove $buildDeps \

    # mix ecto.create
    && mix local.rebar --force \

    # inotify-tools (for linux users)
    && apt-get install -y --no-install-recommends inotify-tools \
    && rm -rf /var/lib/apt/lists/*
