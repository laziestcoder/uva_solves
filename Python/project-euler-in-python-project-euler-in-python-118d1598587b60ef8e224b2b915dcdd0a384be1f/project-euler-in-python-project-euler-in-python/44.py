"""Pentagonal numbers are generated by the formula, Pn=n(3n−1)/2. The first ten pentagonal numbers are:

1, 5, 12, 22, 35, 51, 70, 92, 117, 145, ...

It can be seen that P4 + P7 = 22 + 70 = 92 = P8. However, their difference, 70 − 22 = 48, is not pentagonal.

Find the pair of pentagonal numbers, Pj and Pk, for which their sum and difference is pentagonal and D = |Pk − Pj| is minimised; what is the value of D?
"""
import itertools

pentagonals = (i*(3*i-1)//2 for i in itertools.count(1))

ps = set(itertools.islice(pentagonals, 5000))

diffs = set()

for i, j in itertools.product(ps, repeat=2):
    diff = abs(i - j)
    sum_ = i + j
    if diff in ps and sum_ in ps:
        diffs |= {diff}
        print(i, j, diff)

print(min(diffs))
