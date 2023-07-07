import matplotlib.pyplot as plt
import pandas as pd

data = pd.read_csv('data_grafik.csv')

counts = data.groupby(['wilayah', 'jenis_usaha']).size().reset_index(name='jumlah')
sums = counts.groupby('wilayah').sum().reset_index()

fig = plt.figure(figsize=(10,6))
plt.bar(sums['wilayah'], sums['jumlah'])

plt.title('Banyak Wilayah yang Memiliki Jenis Usaha')
plt.xlabel('Wilayah')
plt.ylabel('Jumlah')
fig