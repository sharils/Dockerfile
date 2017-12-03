FROM elixir
MAINTAINER sharils <sharils@users.noreply.github.com>

RUN \

    # Here’s the command to install Hex
    mix local.hex --force && \

    # Phoenix
    mix archive.install --force https://github.com/phoenixframework/archives/raw/master/phx_new.ez && \

    # node.js (>= 5.0.0)
    curl -sL https://deb.nodesource.com/setup_8.x | bash - && \
    apt-get install -y nodejs && \

    # mix ecto.create
    mix local.rebar --force && \

    # inotify-tools (for linux users)
    apt-get install -y inotify-tools && \

    # cleanup
    apt-get clean
