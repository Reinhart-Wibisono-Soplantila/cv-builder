# Base image - Node.js versi LTS
FROM node:20-alpine

# Set working directory di dalam container
WORKDIR /app

# Copy package.json dulu (untuk cache layer)
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy semua file project
COPY . .

# Expose port 3000
EXPOSE 3000

# Jalankan Vite dev server
CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]