import matplotlib.pyplot as plt
import pandas as pd

data = pd.read_csv('data_grafik.csv')

counts = data.groupby(['kecamatan', 'jenis_usaha']).size().reset_index(name='jumlah')
sums = counts.groupby('kecamatan').sum().reset_index()

fig = plt.figure(figsize=(10,6))
plt.pie(sums['jumlah'], labels=sums['kecamatan'], autopct='%1.1f%%', startangle=90)

plt.title('Banyak Kecamatan yang Memiliki Jenis Usaha')
fig                                                                                                         