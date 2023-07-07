import matplotlib.pyplot as plt
import pandas as pd

data = pd.read_csv('data_grafik.csv')

counts = data.groupby('jenis_usaha').size()

fig = counts.plot(kind='bar', figsize=(10,6)).get_figure()

plt.title('Banyak Jenis Usaha di Jakarta')
plt.xlabel('Jenis Usaha')
plt.ylabel('Jumlah')

fig