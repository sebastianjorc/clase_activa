FROM node:alpine
WORKDIR /app
COPY package*.json ./
RUN npm install -g @vue/cli@latest
RUN npm install --quiet
COPY . .